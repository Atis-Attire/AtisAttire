<?php

use App\Models\Modell;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('modells', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 30);
            $table->foreignId('designer')->references('id')->on('designers');
            $table->text('describe');
            $table->string('picture');
            $table->string('season');
            $table->foreignId('category')->references('id')->on('categories');
            $table->integer('price');
            $table->timestamps();
        });

        Modell::create(['name' => 'DERES', 'designer' => '1', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/barnaPulcsi.jpg', 'season' => 'Summer', 'category' => '1', 'price' => 10000]);
        Modell::create(['name' => 'SZEGÉNY', 'designer' => '2', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/feketePulcsi.jpg', 'season' => 'Winter', 'category' => '2', 'price' => 11000]);
        Modell::create(['name' => 'NEMES', 'designer' => '3', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/feherPulcsi.jpg', 'season' => 'Fall', 'category' => '3', 'price' => 12000]);
        Modell::create(['name' => 'ESSENCE', 'designer' => '4', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/kekPulcsi.jpg', 'season' => 'Spring', 'category' => '4', 'price' => 13000]);
        Modell::create(['name' => 'URA TOP', 'designer' => '5', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/lilaPulcsi.jpg', 'season' => 'Summer', 'category' => '5', 'price' => 14000]);
        Modell::create(['name' => 'BORD', 'designer' => '6', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/narancssargaPulcsi.jpg', 'season' => 'Winter', 'category' => '6', 'price' => 15000]);
        Modell::create(['name' => 'FAKO', 'designer' => '7', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/pirosPulcsi.jpg', 'season' => 'Fall', 'category' => '7', 'price' => 16000]);
        Modell::create(['name' => 'ZAJK', 'designer' => '8', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/rozsaszinPulcsi.jpg', 'season' => 'Spring', 'category' => '8', 'price' => 17000]);
        Modell::create(['name' => 'ZIRIND', 'designer' => '9', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/sargaPulcsi.jpg', 'season' => 'Summer', 'category' => '9', 'price' => 18000]);
        Modell::create(['name' => 'ISLÓG', 'designer' => '10', 'describe' => 'Pamutkeverék kapucnis melegítőfelső. Lezser fazonok dzsörzével bélelt, húzózsinóros kapucnival, egy kenguruzsebbel, hosszú ujjal, széles bordás passzés kézelővel és aljjal. Puhára bolyhozott fonák.', 'picture' => 'termekFoKepek/zoldPulcsi.jpg', 'season' => 'Winter', 'category' => '10', 'price' => 19000]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modells');
    }
};
