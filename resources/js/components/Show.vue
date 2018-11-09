<template>
	<div class="modal" :class='openmodal'>
	  <div class="modal-background"></div>
	  <div class="modal-card">
	    <header class="modal-card-head">
	      <p class="modal-card-title">Details of {{ list.name }}</p>
	      <button class="delete" aria-label="close" @click='close'></button>
	    </header>
	    <section class="modal-card-body">
	       <li class="panel-block">
	       	<label class="column is-2">Name is: </label><b>{{ list.name }}</b>
	       </li>

	       <li class="panel-block">
	       	<label class="column is-2">Phone is: </label><b>{{ list.phone }}</b>
	       </li>

	       <li class="panel-block">
	       	<label class="column is-2">Email is: </label><b>{{ list.email }}</b>
	       </li>
	    </section>
	    <footer class="modal-card-foot">
	      <button class="button" @click='close'>Cancel</button>
	    </footer>
	  </div>
	</div>
</template>
<script>
	export default{
		props:['openmodal'],
		data(){
			return{
				list: ''
			}
		},
		methods:{
			close(){
				this.$emit('closeRequest')
			},
		}
	}
</script>