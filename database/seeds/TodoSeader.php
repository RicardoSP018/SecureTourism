<?php

use Illuminate\Database\Seeder;

class TodoSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('usuarios')->insert([
            'username' => Str::random(10),
            'correo' => Str::random(10).'@gmail.com',
            'contrasena' => bcrypt('password'),
            'tipo' => Str::random(10),
        ]);

         DB::table('usuarios')->insert([
            'username' => Str::random(10),
            'correo' => Str::random(10).'@gmail.com',
            'contrasena' => bcrypt('password'),
            'tipo' => Str::random(10),
        ]);

         DB::table('administradors')->insert([
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'direccion' => Str::random(10),
            'fechaNac' => "2019-11-12",
            'telefono' => 1234567890,
            'usuario_id' => 1,
        ]);

         DB::table('turistas')->insert([
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'telefono' => Str::random(10),
            'email' => Str::random(5).'@gmail.com',
            'usuario_id' => 2,
        ]);

         DB::table('paquetes')->insert([
            'nombre' => Str::random(10),
            'descripcion' => Str::random(10),
            'contenido' => Str::random(10),
            'duracion' => Str::random(5),
            'imagen' => Str::random(10),
        ]);

          DB::table('paquete_adquiridos')->insert([
            'fechaInicio' => '2019-04-01',
            'fechaFin' => '2019-05-01',
            'precio' => 800,
            'turista_id' =>1,
            'paquete_id' =>1,
         
        ]);

           DB::table('dispositivos')->insert([
           	'nombre' => Str::random(10),
           	'alcance' => Str::random(10),
           	'estado' => Str::random(5),
           	'Imagen' => Str::random(10),
         
        ]);

          DB::table('dispositivo_asignados')->insert([
            'Inicio' => '2019-03-09',
            'Final' => '2019-04-09',
            'dispositivo_id' =>1,
            'paquete_adquiridos_id' =>1,
        ]);

       DB::table('waypoints')->insert([
           	'fecha' => '2019-03-09',
           	'hora' => 5,
           	'dispositivo_asignados_id' =>1,
        ]);  


          DB::table('destinos')->insert([
          	'nombre' => Str::random(10),
            'cupoMax' => 2,
            'paquete_id' =>1,
        ]); 

          DB::table('agencias')->insert([
          	'nombreAgencia' => Str::random(10),
          	'nombreDueno' => Str::random(10),
          	'telefono' => 1234567890,
            'descripcion' => Str::random(10),
            'direccion' => Str::random(10),
            'correo' => Str::random(5).'@gmail.com',
            'redesSociales' => Str::random(10),
            'administrador_id' =>1,
        ]); 

           DB::table('guias')->insert([
          	'nombre' => Str::random(10),
          	'apellido' => Str::random(10),
            'direccion' => Str::random(10),
            'fechaNac' => "1992-03-09",
            'redesSociales' => Str::random(10),
            'agencia_id' =>1,
        ]);

            DB::table('guia_asignados')->insert([
            'paquete_id' =>1,
            'guia_id' =>1,
        ]); 

             DB::table('categorias')->insert([
          	'nombre' => Str::random(10),
          	'descripcion' => Str::random(10),
            'imagen' => Str::random(10),
            'paquete_id' =>1,
        ]);

             DB::table('suscripcions')->insert([
          	'nombre' => Str::random(10),
          	'descripcion' => Str::random(10),
            'estado' => Str::random(10),
            'inicio' => '2019-03-09',
            'vencimiento' => '2019-04-09',
            'agencia_id' =>1,
        ]);
             DB::table('servicios')->insert([
          	'tiempo' => Str::random(5),
          	'descripcion' => Str::random(10),
            'suscripcion_id' =>1,
        ]);

              DB::table('promocions')->insert([
          	'nombre' => Str::random(10),
          	'requisitos' => Str::random(10),
            'precio' => 800,
            'fechaInicio' => '2019-03-09',
            'fechaFinal' => '2019-04-09',
        ]);

             DB::table('promocion_asignadas')->insert([
            'paquete_id' =>1,
            'promocion_id' =>1,
        ]); 

    }
}
