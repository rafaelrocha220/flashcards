@extends('user.layout.index')

@section('titulo', 'Página inicial')

@section('contents')
<?php 
    // Test database connection
    try {
        DB::connection()->getPdo();
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
?>
@endsection('contents')