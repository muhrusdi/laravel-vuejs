<template>
	<div class="columns">
		<div class="column">
			<myContent :name="cinta"></myContent>
		</div>
		<div class="column">
			second
		</div>
	</div>
</template>

<script>
	import Content from './Content.vue';
	export default {
		
		data: function() {
			return {
				cinta: 'Ulfah Maharani'
			};
		},
		components: {
			myContent: Content
		}
	}
</script>