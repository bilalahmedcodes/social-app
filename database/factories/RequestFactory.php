<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Request>
 */
class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $senderId = $this->faker->numberBetween($min = 1, $max = 200);

        return [
            'sender_id' => $senderId,
            'reciever_id' => $this->excludeSenderId($senderId),
        ];
    }

    private function excludeSenderId($senderId)
    {
        $recieverId = $this->faker->numberBetween($min = 1, $max = 200);
        while ($recieverId === $senderId) {
            $recieverId = $this->faker->numberBetween($min = 1, $max = 200);
        }
        return $recieverId;
    }
}
