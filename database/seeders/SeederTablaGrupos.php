<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Grupo;

class SeederTablaGrupos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $grupos = [

                    '1A',
                    '1B',
                    '1C',
                    '1D',
                    '1E',
                    '1F',
                    '1G',
                    '1H',
                    '1I',
                    '1J',
                    '1K',
                    '1L',
                    '1M',
                    '1N',
                    '1O',
                    '1P',
                    '1Q',
                    '1R',
                    '1S',
                    '1T',
                    '2A',
                    '2B',
                    '2C',
                    '2D',
                    '2E',
                    '2F',
                    '2G',
                    '2H',
                    '2I',
                    '2J',
                    '2K',
                    '2L',
                    '2M',
                    '2N',
                    '2O',
                    '2P',
                    '2Q',
                    '2R',
                    '2S',
                    '2T',
                    '3A',
                    '3B',
                    '3C',
                    '3D',
                    '3E',
                    '3F',
                    '3G',
                    '3H',
                    '3I',
                    '3J',
                    '3K',
                    '3L',
                    '3M',
                    '3N',
                    '3O',
                    '3P',
                    '3Q',
                    '3R',
                    '3S',
                    '3T',
                    '4B',
                    '4A',
                    '4C',
                    '4D',
                    '4E',
                    '4F',
                    '4G',
                    '4H',
                    '4I',
                    '4J',
                    '4K',
                    '4L',
                    '4M',
                    '4N',
                    '4O',
                    '4P',
                    '4Q',
                    '4R',
                    '4S',
                    '4T',
                    '5A',
                    '5B',
                    '5C',
                    '5D',
                    '5E',
                    '5F',
                    '5G',
                    '5H',
                    '5I',
                    '5J',
                    '5K',
                    '5L',
                    '5M',
                    '5N',
                    '5O',
                    '5P',
                    '5Q',
                    '5R',
                    '5S',
                    '5T',
                    '6A',
                    '6B',
                    '6C',
                    '6D',
                    '6E',
                    '6F',
                    '6G',
                    '6H',
                    '6I',
                    '6J',
                    '6K',
                    '6L',
                    '6M',
                    '6N',
                    '6O',
                    '6P',
                    '6Q',
                    '6R',
                    '6S',
                    '6T',
                    '7A',
                    '7B',
                    '7C',
                    '7D',
                    '7E',
                    '7F',
                    '7G',
                    '7H',
                    '7I',
                    '7J',
                    '7K',
                    '7L',
                    '7M',
                    '7N',
                    '7O',
                    '7P',
                    '7Q',
                    '7R',
                    '7S',
                    '7T',
                    '8A',
                    '8B',
                    '8C',
                    '8E',
                    '8F',
                    '8D',
                    '8G',
                    '8I',
                    '8H',
                    '8J',
                    '8K',
                    '8L',
                    '8M',
                    '8N',
                    '8O',
                    '8P',
                    '8Q',
                    '8R',
                    '8S',
                    '8T',
                    '9A',
                    '9B',
                    '9C',
                    '9D',
                    '9E',
                    '9F',
                    '9G',
                    '9H',
                    '9I',
                    '9J',
                    '9K',
                    '9L',
                    '9M',
                    '9N',
                    '9O',
                    '9P',
                    '9Q',
                    '9R',
                    '9S',
                    '9T',
                    '10A',
                    '10B',
                    '10C',
                    '10D',
                    '10E',
                    '10F',
                    '10G',
                    '10H',
                    '10I',
                    '10J',
                    '10K',
                    '10L',
                    '10M',
                    '10N',
                    '10O',
                    '10P',
                    '10Q',
                    '10T',
                    '10R',
                    '10S',
        ];

        //Este foreach agrega todos los permisos de la cadena a la tabla 
        foreach($grupos as $grupo){
            Grupo::create(['nombre'=>$grupo]);
        }
    }
}
