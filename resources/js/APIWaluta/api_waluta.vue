<template>
<div class="column is-8 is-offset-2">
		<div class="column">
		<h2>Wybierz walute</h2>
		<div class="control">
			<div class="select">
				<select id="kasiora" v-model="form.cash">
					<option v-for="kasa in cash" :value="{{ kasa['code'] }}">
						{{ kasa['currency'] }}
					</option>
				</select>
			</div>
		</div>
	</div>
	<div class="columns">	
		<div class="column">
			<h2>Wybierz datę od:</h2>
			<div class="control">
				<input type="date" id="date-end" name="end" v-model="form.end" value="2019-05-24" min="2002-05-24" max="2019-05-24">
			</div>
		</div>
		<div class="column">
			<h2>Wybierz datę do:</h2>
			<div class="control">
				<input type="date" id="date-start" name="start" v-model="form.start" value="2019-06-24" min="2002-06-24" max="2019-06-24">
			</div>
		</div>
		<div class="form-group">
			<button class="btn btn-success btn-submit" type="submit">Pokaż</button>
		</div>
	</div>
	<div class="columns">
		<div class="column">
			<h2>Tutaj będzie wykres</h2>
			<p>Wyświetl:</p>
				<p id="res">Tu będzie kod</p>
					<table class="is-bordered">
						<thead>
						<tr>
							<th>Data</th>
							<th>Kurs</th>
						</tr>
						</thead>
						<tbody id="date-mid">
						</tbody>
					</table>

				<div id="chartContainer" style="height: 300px; width: 100%;"></div>
					
			</div>
</div>
</div>
</template>
<script>
import axios from 'axios';

export default{

props: {
	cash: {type: Array, required: true},
},

data(){
	return{
		tableCash: [],
		
		form:	{
			cash: null,
			end: null,
			start:	null,
		}
	}
},
methods: {
	Show(){
		axios.get('/apiwaluta/pokaz', this.form).then((response) => {
			window.location.href = '/apiwaluta';
			}).catch(error => {
				alert('Błąd!');
		});
	}
}

}

</script>
<style scoped>
</style>