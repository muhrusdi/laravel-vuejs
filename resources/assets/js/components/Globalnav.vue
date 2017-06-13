<template>
	<div class="container">
		<div class="notification">
			<ul>
				<li v-for="item in gnItems"><a href="#">{{ item }}</a></li>
			</ul>
		</div>
		
	</div>
</template>

<script>
	export default { 
		data: function() {
			return {
				gnItems: ['Home', 'Blog', 'Contact', 'About']
			}
		}
	}
</script>
