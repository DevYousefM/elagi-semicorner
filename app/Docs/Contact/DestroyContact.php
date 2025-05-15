<?php

namespace App\Docs\Contact;

/**
 * @OA\Delete(
 *     path="/api/contacts/{id}",
 *     summary="Delete a contact message by ID",
 *     tags={"Contact"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Contact message ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Contact deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Contact deleted successfully")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Contact not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Contact not found")
 *         )
 *     )
 * )
 */
class DestroyContact {}
