@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
<img src="{{ env('APP_URL'). 'img/logo.webp?version='.rand() }}" class="logo" alt="Coppa Cocktail">
</a>
</td>
</tr>
