#BasEE64

BasEE64 is an ExpressionEngine plugin that encodes and decodes data via the php base64_encode() and base64_decode() function.

##Example of encoding:
<pre>{exp:basee64:encode}
	This&lt;br&gt;
	is&lt;br&gt;
	on&lt;br&gt;
	many&lt;br&gt;
	lines
{/exp:basee64:encode}</pre>

Will result in the string:

<pre>ICAgIFRoaXM8YnI+DQogICAgaXM8YnI+DQogICAgb248YnI+DQogICAgbWFueTxicj4NCiAgICBsaW5lcw==</pre>

##Example of decode:

<pre>{exp:basee64:decode}
	ICAgIFRoaXM8YnI+DQogICAgaXM8YnI+DQogICAgb248YnI+DQogICAgbWFueTxicj4NCiAgICBsaW5lcw==
{/exp:basee64:decode}</pre>

Will result in the string:

<pre>
	This&lt;br&gt;
	is&lt;br&gt;
	on&lt;br&gt;
	many&lt;br&gt;
	lines
</pre>

##Example of recursion:

<pre>{exp:basee64:decode}
	{exp:basee64:encode parse="inward"}
		This&lt;br&gt;
		is&lt;br&gt;
		on&lt;br&gt;
		many&lt;br&gt;
		lines
	{/exp:basee64:encode}
{/exp:basee64:decode}</pre>
