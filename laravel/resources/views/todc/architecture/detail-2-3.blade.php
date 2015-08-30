<h2>View</h2>
<ul>
<li>Blade is a quick and relatively simple template engine for rendering you views.
<li>Features many of the core functions found in other popular engines such as twig and smarty
<li>Since blade views are PHP scripts, you can use PHP code directly in your templates (with caution)
<li>Inheritance-driven to allow for multiple layouts, sections, etc
</ul>
<p>Here are examples about how to write code in Laravel views </p>
<pre>
<code>@</code>extends(‘master’) -> include
<code>@</code>yield(‘content’,’[opt] default content’) -> placeholder
pair with 
<code>@</code>section(‘content’)
     
<code>@</code>stop
<code>@</code>include(‘view.name’) -> sub view

Echoing : triple curly brace syntax to escape any HTML entities in the content.

{{-- This comment will not be in the rendered HTML --}}

</pre>
