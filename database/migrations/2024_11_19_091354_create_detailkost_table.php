use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailkostTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailkost', function (Blueprint $table) {
            $table->id('idKost');
            $table->string('namaKost', 100);
            $table->string('hargaKost', 100);
            $table->string('alamatKost', 100);
            $table->string('tagKost', 50);
            $table->string('fasilitasKost1', 50);
            $table->string('fasilitasKost2', 50);
            $table->string('fasilitasKost3', 50);
            $table->string('fasilitasKost4', 50);
            $table->string('fasilitasKost5', 50);
            $table->string('aturanKost1', 100);
            $table->string('aturanKost2', 100);
            $table->string('aturanKost3', 100);
            $table->string('aturanKost4', 100);
            $table->string('aturanKost5', 100);
            $table->string('fotoKost1', 100);
            $table->string('fotoKost2', 100);
            $table->string('fotoKost3', 100);
            $table->string('fotoKost4', 100);
            $table->string('fotoKost5', 100);
            $table->string('googleMapsKost', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.```php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailkostTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailkost', function (Blueprint $table) {
            $table->id('idKost');
            $table->string('namaKost', 100);
            $table->decimal('hargaKost', 10, 2);
            $table->string('alamatKost', 100);
            $table->string('tagKost', 50);
            $table->json('fasilitasKost');
            $table->json('aturanKost');
            $table->json('fotoKost');
            $table->string('googleMapsKost', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailkost');
    }
}
```
     */
    public function down(): void
    {
        Schema::dropIfExists('detailkost');
    }
}
