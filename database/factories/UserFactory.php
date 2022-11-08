<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nama = fake()->name();
        $warna = ['4420c7', 'f20808', '0dff00', 'dd00ff', '000000'];
        $w_rand = array_rand($warna, 1);
        $dua_carakter_nama = strtoupper($nama[0] . $nama[1]);
        $pictur = 'https://dummyimage.com/200x200/' . $warna[$w_rand] . '/ffffff.png&text=' . $dua_carakter_nama;
        return [
            'name' => $nama,
            'username' => fake()->regexify('[A-Z]{5}[0-4]{3}'),
            'avatar' => $pictur,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
