import pytesseract
from PIL import Image
import re
import pandas as pd
import json
import sys

def extract_calcium_value(image_path):
    image = Image.open(image_path)
    text = pytesseract.image_to_string(image)
    calcium_regex = r"Calcium[\s\S]*?([\d.]+)\s*mg/dL"
    matches = re.findall(calcium_regex, text, re.IGNORECASE | re.DOTALL)
    for match in matches:
        if re.match(r'^\d+\.\d+$', match):
            return float(match)
    return None

def compare_with_dataset(extracted_value, dataset, result_mapping):
    if extracted_value is None:
        return {
            "condition": "Not available",
            "status": "Calcium value not found in the image",
            "reference_range": "Not available",
            "result_code": None,
            "extracted_value": None,
            "nearest_condition": "Not available",
            "nearest_value": None
        }

    ref_range = dataset['Calcium, Total Reference Range'].iloc[0]
    lower_bound, upper_bound = map(float, ref_range.split('-'))

    dataset['Difference'] = dataset['Calcium, Total'].apply(lambda x: abs(x - extracted_value))
    nearest_row = dataset.loc[dataset['Difference'].idxmin()]

    if extracted_value < lower_bound:
        condition = "Hypocalcemia"
        status = "Below Normal"
    elif extracted_value > upper_bound:
        condition = "Hypercalcemia"
        status = "Above Normal"
    else:
        condition = "Normal"
        status = "Within Normal Range"

    result_code = result_mapping[condition]

    nearest_condition = None
    for key, value in result_mapping.items():
        if value == int(nearest_row['Result']):
            nearest_condition = key
            break

    return {
        "condition": condition,
        "status": status,
        "reference_range": str(ref_range),
        "result_code": int(result_code),
        "extracted_value": float(extracted_value),
        "difference": float(nearest_row['Difference']),
        "nearest_result_value": int(nearest_row['Result']),
        "nearest_condition": nearest_condition or "Condition not mapped"
    }

if __name__ == "__main__":
    if len(sys.argv) < 3:
        print("Usage: python script.py <dataset_path> <image_path or --calcium-level <value>>")
        sys.exit(1)

    dataset_path = sys.argv[1]
    manual_input = False

    if sys.argv[2] == '--calcium-level':
        extracted_value = float(sys.argv[3])
        manual_input = True
    else:
        image_path = sys.argv[2]
        extracted_value = extract_calcium_value(image_path)

    dataset = pd.read_excel(dataset_path)

    Calcium_Result_Column_Mapping = {
        'hypoalbuminemia': 1,
        'Hypocalcemia': 2,
        'Hypercalcemia': 3,
        'hyperparathyroidism': 4,
        'hyperproteinemia': 5,
        'hypoparathyroidism': 6,
        'Normal': 0,
    }

    results = compare_with_dataset(extracted_value, dataset, Calcium_Result_Column_Mapping)

    json_results = json.dumps(results, indent=4)
    print(json_results)
