@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>
		
					<div class="panel-body">
						{{ trans('adminlte_lang::message.logged') }}
					</div>

					<p>  Apartado Body
							Sistemas Expertos: Este curso desarrolla los avances obtenidos en el área de inteligencia artificial y en definitiva de los sistemas expertos. El curso se desarrolla alrededor de múltiples disciplinas como: ciencias de la computación, ingeniería, medicina, matemáticas, economía y ciencias sociales.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
