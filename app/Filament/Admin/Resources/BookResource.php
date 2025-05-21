Forms\Components\TextInput::make('book')
    ->label('Judul Buku')
    ->required()
    ->maxLength(255)
    ->unique(ignoreRecord: true) // Validasi agar tidak duplikat

Forms\Components\TextInput::make('publisher')
    ->label('Penerbit')
    ->required()
    ->maxLength(255)
    ->helperText('Isi dengan nama penerbit resmi')
