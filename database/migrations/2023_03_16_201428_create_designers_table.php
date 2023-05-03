<?php


use App\Models\Designer;
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
        Schema::create('designers', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 40);
            $table->text('picture');
            $table->text('description');
            $table->timestamps();
        });

        Designer::create(['name' => 'Alexandra Kovács', 'picture' => 'tervezoKepek/tervezoKep1.jpg', 'description' => 'Szenvedélyes tervező vagyok, aki szeretne ruháival nőket boldogabbá tenni. Célom, hogy olyan ruhákat tervezek, amelyek nemcsak stílusosak, de kényelmesek is, és kiemelik a nők szépségét.']);
        Designer::create(['name' => 'Eszter Szabó', 'picture' => 'tervezoKepek/tervezoKep2.jpg', 'description' => 'A divat mindig is az életem része volt, és ez a szenvedélyem azóta sem hagyott alább. A tervezői munka számomra a kreativitás és az önkifejezés egy formája, amellyel a nőket szeretném inspirálni.']);
        Designer::create(['name' => 'Dóra Horváth', 'picture' => 'tervezoKepek/tervezoKep3.jpg', 'description' => 'Célom, hogy olyan ruhákat tervezzek, amelyek stílusosak, mégis praktikusak és kényelmesek. Szeretem a minimalista megközelítést, de szeretnék néhány egyedi részletet belecsempészni a tervezéseimbe.']);
        Designer::create(['name' => 'Viktória Nagy', 'picture' => 'tervezoKepek/tervezoKep4.jpg', 'description' => 'A nőiesség és a stílus mindig is fontos szerepet játszottak az életemben. Szeretem a letisztult, elegáns vonalvezetést, de szeretnék olyan ruhákat tervezni, amelyek az egyéniségünket is kiemelik.']);
        Designer::create(['name' => 'Emília Balogh', 'picture' => 'tervezoKepek/tervezoKep5.jpg', 'description' => 'Az inspirációmat a természetből merítem, és szeretném ezt az érzést belecsempészni a tervezéseimbe. Célom, hogy olyan ruhákat tervezzek, amelyek stílusosak és egyediek, de mindig kényelmesek és könnyen viselhetőek.']);
        Designer::create(['name' => 'Ádám Farkas', 'picture' => 'tervezoKepek/tervezoKep6.jpg', 'description' => 'Egy divattervező, aki szakmai tapasztalattal és kreativitással rendelkezik a divatiparban. A tervezői énem által teremtett ruhaköltemények minden egyes részletében a nőiesség és elegancia ötvöződik']);
        Designer::create(['name' => 'Zoltán Szilágyi', 'picture' => 'tervezoKepek/tervezoKep7.jpg', 'description' => 'Divattervezőként szeretem az elegáns, stílusos darabokat tervezni, amelyek egyszerre klasszikusak és modernek. A ruhakölteményeimben az anyagok és a formák kreatív játékával játszom.']);
        Designer::create(['name' => 'Réka Kiss', 'picture' => 'tervezoKepek/tervezoKep8.jpg', 'description' => 'A ruhatervezés számomra a kreativitás és a kihívás egy formája. Szeretném olyan ruhákkal inspirálni a nőket, amelyek nemcsak stílusosak és egyediek, de magabiztosságot és önbizalmat is adnak.']);
        Designer::create(['name' => 'Kinga Molnár', 'picture' => 'tervezoKepek/tervezoKep9.jpg', 'description' => 'A tervezői munka számomra a kreativitás és az önkifejezés egy formája, és szeretném ezt az érzést átadni az embereknek. Célom, hogy olyan ruhákat tervezzek, amelyekkel minden nő magabiztosabban érezheti magát a bőrében.']);
        Designer::create(['name' => 'Márta Tóth', 'picture' => 'tervezoKepek/tervezoKep10.jpg', 'description' => 'A stílus mindig is fontos volt az életemben, és ezt a szenvedélyemet szeretném a tervezéseimbe belecsempészni. Célom, hogy olyan ruhákat tervezzek, amelyek nemcsak divatosak és stílusosak, de kényelmesek és praktikusak is.']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designers');
    }
};
