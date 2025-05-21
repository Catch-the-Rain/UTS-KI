public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('book')->unique();
        $table->string('publisher');
        $table->timestamps();
        $table->softDeletes(); // untuk fitur soft delete
    });
}
