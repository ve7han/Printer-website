<!doctype html>
<html lang="en">

<head>
	<title>Pie Chart | Kazy Tv</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<section class="pie_chart_content">

		<div class="overlay">

			<div class="container">
				<div class="row">


					<div class="col-md-6">

						<div class="main_box">

							<h1 style="text-align : center">Display Products Sells Pie Chart</h1>

							<canvas id="myChart"></canvas>

						</div>
					</div>


					<div class="col-md-6">

						<div class="count_box">




							<div class="form-group">
								<label for="Posters">Total Type of Products</label>
								<input type="text" value="3" readonly class="total-input form-control" />
							</div>

							<div class="form-group">
								<label for="Posters">Posters</label>
								<input type="number" name="Posters" class="Posters form-control" min="1"/>
							</div>

							<div class="form-group">
								<label for="Flyers">Flyers</label>
								<input type="number" name="Flyers" class="Flyers form-control" min="1"/>
							</div>

							<div class="form-group">
								<label for="Cartes_visites">Cartes visites</label>
								<input type="number" name="Cartes_visites" class="Cartes_visites form-control" min="1"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
	<script src="js/main.js"></script>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="public/js/main.js"></script>
</body>
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:600&display=swap');

body {
	color: white;
}

.pie_chart_content {
	background-image: url("https://scandiononcology.com/wp-content/uploads/2018/12/iStock-673266772.jpg");
	height: 900px;
	margin-top : -30px;

}


.overlay {
	background-color: #f2F2F2;
	height: 1000px;
	padding-top: 70px;
	padding-bottom: 70px;
	margin-top: -30px;
}

.pie_chart_content .container {


	background-color: white;
	border-radius: 40px;
	padding: 0px;



}

.main_box h1 {
	padding: 50px 0px 50px 0px;
	font-size: 25px;
	color: black;
}

.main_box {

	background-color: white;
	height: 100%;
	border-bottom-left-radius: 30px;
	border-top-left-radius: 30px;
	
}

.count_box {
	background-color: #242e33;
	border-bottom-right-radius: 30px;
	border-top-right-radius: 30px;
	height: 100%;
	padding: 100px;
}


.total-input {
	background-color: #3546b0;
	border: none;
	color: white;
}

.form-control:disabled,
.form-control[readonly] {
	background-color: #3546b0;
	opacity: 1;
}

.Posters {
	background-color: #2adece;
	border: none;
	color: white;
}

.Flyers {
	background-color: #dd3b79;
	border: none;
	color: white;
}

.Cartes_visites {
	background-color: #ff766b;
	border: none;
	color: white;
}

.form-control:focus {
	background-color: transparent;
	border: none;
	color: white;
}


.input-block {

	font-size: 15px;
}

.input-block input {
	border: 0;
	border-radius: 5px;
	padding: 10px;
	font-size: 0.8em;
	outline: 0;
	margin-left: 16px;
}
</style>
<script>
const Posters = document.querySelector('.Posters');
const Flyers = document.querySelector('.Flyers');
const Cartes_visites = document.querySelector('.Cartes_visites');

const ctx = document.getElementById('myChart').getContext('2d');
let myChart = new Chart(ctx, {
	type: 'pie',
	data: {
		labels: ['Posters', 'Flyers', 'Cartes_visites'],
		datasets: [
			{
				label: '# of Votes',
				data: [0, 0, 0],
				backgroundColor: ['#2adece', '#dd3b79', '#ff766b'],
				borderWidth: 1
				
			}
		]
	}
});

const updateChartValue = (input, dataOrder) => {
	input.addEventListener('change', e => {
		myChart.data.datasets[0].data[dataOrder] = e.target.value;
		myChart.update();
	});
};

updateChartValue(Posters, 0);
updateChartValue(Flyers, 1);
updateChartValue(Cartes_visites, 2);
</script>
</html>