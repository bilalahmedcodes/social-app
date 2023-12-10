<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Connection>
 */
class ConnectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $userId = $this->faker->numberBetween($min = 1, $max = 200);

        return [
            'user_id' => $userId,
            'friend_id' => $this->excludeFriendId($userId),
        ];
    }

    private function excludeFriendId($userId)
    {
        $friendId = $this->faker->numberBetween($min = 1, $max = 200);
        while ($friendId === $userId) {
            $friendId = $this->faker->numberBetween($min = 1, $max = 200);
        }
        return $friendId;
    }
}
