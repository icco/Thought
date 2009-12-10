{include file='header.tpl'}

<h1>{$title}</h1>
<h2>{$description}</h2>


<div id="about">
<h3>About</h3>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis lorem nisl,
in semper sapien. Proin lacus leo, gravida euismod feugiat ac, consectetur a
ante. Aenean vitae turpis justo, sit amet convallis dolor. Phasellus
consectetur turpis vel urna porta condimentum. Phasellus et neque vitae dui
rutrum accumsan eget commodo enim. Mauris tincidunt ultrices tortor, eget
porttitor risus porta hendrerit. Sed sit amet elit metus. Maecenas pulvinar
mauris a dolor porttitor non placerat lacus laoreet. Sed at mauris ligula.
Quisque ligula odio, placerat ut fringilla eu, mattis ut dui. Vivamus commodo
tincidunt purus a tempus. 
</p>
</div>

{if count($posts) > 0}
<h3>Newest Posts</h3>
<ul>
   {foreach from=$posts item=post}
      <li>{$post->title}</li>
   {/foreach}
</ul>
{/if}

{include file='footer.tpl'}
