<h2>Control Structures</h2>
<h3>If Statements</h3>
<p>
	You may construct
	<code>if</code>
	statements using the
	<code>
		@<span>if</span>, @<span>elseif</span>, @<span>else</span>, and @<span>endif</span>
	</code>
	directives. These directives function identically to their PHP
	counterparts:
</p>
<pre class=" language-php">
@<span>if</span> <span>(</span><span class="token function">count<span>(</span></span><span
		class="token variable">$records</span><span>)</span> <span
		class="token operator">===</span> <span class="token number">1</span><span>)</span>
I have one record<span class="token operator">!</span>
@<span>elseif</span> <span>(</span><span class="token function">count<span>(</span></span><span
		class="token variable">$records</span><span>)</span> <span
		class="token operator">&gt;</span> <span class="token number">1</span><span>)</span>
I have multiple records<span class="token operator">!</span>
@<span>else</span>
I don't have any records<span class="token operator">!</span>
@<span>endif</span>
</pre>
<p>
	For convenience, Blade also provides an
	<code>
		@<span>unless</span>
	</code>
	directive:
</p>
<pre>
@<span>unless (Auth::check())</span>
    You are not signed in.
@<span>endunless</span>
</pre>

<h3>Loops (view source code)</h3>
{{-- @for ($i = 0; $i < 10; $i++) The current value is {{ $i }} @endfor
@foreach ($users as $user)
<p>This is user {{ $user->id }}</p>
@endforeach @forelse ($users as $user)
<li>{{ $user->name }}</li>
@empty
<p>No users</p>
@endforelse @while (true)
<p>I'm looping forever.</p>
@endwhile --}}

<h3>Including Sub-Views (view source code)</h3>
{{--
<div>
	@include('shared.errors')

	<form>
		<!-- Form Contents -->
	</form>
</div>

@include('view.name', ['some' => 'data'])
--}}
