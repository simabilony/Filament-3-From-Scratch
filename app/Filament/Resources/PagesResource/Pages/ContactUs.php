<?php

namespace App\Filament\Resources\PagesResource\Pages;

use App\Filament\Resources\PagesResource;
use Filament\Resources\Pages\Page;

class ContactUs extends Page
{
//    protected static string $resource = PagesResource::class;
//
//    protected static string $view = 'filament.resources.pages-resource.pages.contact-us';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.contact-us';
}
