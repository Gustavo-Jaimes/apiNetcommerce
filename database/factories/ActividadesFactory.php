<?php

namespace Database\Factories;

use App\Models\Actividades;
use App\Models\Empresa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Datos
        $name = $this->faker->word;
        $description = $this->faker->paragraph;
        $empresas = Empresa::pluck('id')->toArray();
        $empresa_id = $this->faker->randomElement($empresas);
        
        $user_id = NULL;
        $user_name = NULL;
        $date_start = NULL;
        $date_end = NULL;
        $statusHomework = 0;

        return [
            'name' => $name,
            'description' => $description,
            'empresa_id' => $empresa_id,
            'user_id' => $user_id,
            'user_name' => $user_name,
            'date_start' => $date_start,
            'date_end' => $date_end,
            'status' => $statusHomework,
        ];
    }
}
