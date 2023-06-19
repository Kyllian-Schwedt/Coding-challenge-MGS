@extends('layouts')

@section('title', 'Home Page')

@section('content')
    <section class="content-section">
        <section class="left"> </section>

        <section class="right">
            <section class="top">
                <x-booking></x-booking>
            </section>
            <section class="bottom">
                <x-alert title="-10% sur nos chambres" subTitle="Pendant tout le mois de juillet"></x-alert>
                <x-cro title="Location et Spa à Bandol" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam."></x-cro>
            </section>
        </section>
    </section>
@endsection
