<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    protected $model = \App\Models\Vehicle::class;
 

   public function definition(): array
    {
        // Senarai jenama popular Malaysia
        $jenama = ['Proton', 'Perodua', 'Honda', 'Toyota', 'Nissan', 'Mazda', 'BMW', 'Mercedes'];
        
        // Model ikut jenama
        $model = [
            'Proton' => ['Saga', 'Persona', 'X50', 'X70', 'Iriz'],
            'Perodua' => ['Myvi', 'Axia', 'Bezza', 'Alza', 'Kancil'],
            'Honda' => ['Civic', 'City', 'Jazz', 'HR-V'],
            'Toyota' => ['Vios', 'Hilux', 'Yaris', 'Camry'],
            'Nissan' => ['Almera', 'X-Trail', 'Navara'],
            'Mazda' => ['CX-5', 'Mazda 3', 'Mazda 6'],
            'BMW' => ['320i', 'X1', 'X5'],
            'Mercedes' => ['C200', 'E250', 'GLA200'],
        ];

        $jenama = $this->faker->randomElement($jenama);
        $model = $this->faker->randomElement($model[$jenama]);

        // Warna kereta common Malaysia
        $warna = ['Putih', 'Hitam', 'Kelabu', 'Merah', 'Biru', 'Perak', 'Hijau'];

        return [
            'jenama' => $jenama,
            'model' => $model,
            'warna' => $this->faker->randomElement($warna),
            'plate_no' => $this->generatePlateNumber(),
            'user_id' => \App\Models\User::factory(),
            //'user_id' => \App\Models\User::inRandomOrder->first()->id() ?? \App\Models\User::factory(),
        ];
    }

    // Fungsi untuk generate no plate gaya Malaysia
    private function generatePlateNumber(): string
    {
        if ($this->faker->boolean(10)) 
        {
        $specialPlates = ['PUTRAJAYA', 'MALAYSIA', 'XOIC', 'VIP', 'PROTON', 'PERODUA'];
        $prefix = $this->faker->randomElement($specialPlates);
        $numbers = $this->faker->numberBetween(1, 9999);
        return $prefix . $numbers;
        }

        $prefix = $this->faker->randomElement(['W', 'B', 'J', 'K', 'P', 'N', 'T', 'F', 'V']); // negeri
        $letters = $this->faker->randomLetter() . $this->faker->optional()->randomLetter();
        $numbers = $this->faker->numberBetween(1, 9999);

        return strtoupper($prefix . $letters . $numbers);
    }
}
