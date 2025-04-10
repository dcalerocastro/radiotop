@extends('layout.frontend.app')
@section('content')

<section class="anuncia_con_nosotros">
	<div class="limit anuncia_con_nosotros__inset">
		<div class="anuncia_con_nosotros__content">
			<div class="anuncia_con_nosotros__breadcrumb">
				<a href="/">INICIO</a> / <span>Nuestros servicios</span>
			</div>
			<div class="anuncia_con_nosotros__content__inset">
				<h1 class="anuncia_con_nosotros__content__title">CONOCE NUESTROS SERVICIOS</h1>
				<p class="anuncia_con_nosotros__content__text">Contamos con un equipo con amplio conocimiento de la industria musical y especialmente del medio radial.</p>
				<dl class="anuncia_con_nosotros__content__list">
					<dt>1</dt>
					<dd>Análisis de la competencia</dd>
					<dt>2</dt>
					<dd>Mapeo de oportunidades en la industria</dd>
					<dt>3</dt>
					<dd>Soporte de comunicación para managers</dd>
				</dl>
				<p class="anuncia_con_nosotros__content__text">Escríbenos y conoce qué podemos hacer por tu banda o grupo musical.</p>
			</div>
			<span></span>
		</div>
		<div class="anuncia_con_nosotros__wrapper-form">
			<form action="{{route('home.contacto')}}" method="post" data-tipo="show_thanks" class="anuncia_con_nosotros__form @if(!session('info')) -active- @endif ">
				@csrf
				<strong class="anuncia_con_nosotros__form__title">Déjanos tus datos y te llamaremos</strong>
				<label class="anuncia_con_nosotros__form__label">
					<input class="anuncia_con_nosotros__form__input" type="text" name="full_name" value="" required>
					<span class="anuncia_con_nosotros__form__label__title">Nombres y Apellidos</span>
				</label>
				<label class="anuncia_con_nosotros__form__label">
					<input class="anuncia_con_nosotros__form__input" type="email" name="email" value="" required>
					<span class="anuncia_con_nosotros__form__label__title">Correo electrónico</span>
				</label>
				<label class="anuncia_con_nosotros__form__label">
					<input class="anuncia_con_nosotros__form__input" type="text" name="business_name" value="" required>
					<span class="anuncia_con_nosotros__form__label__title">Nombre del artista, banda o conjunto</span>
				</label>
				<label class="anuncia_con_nosotros__form__label m--select">
					<select id="departamentos" class="anuncia_con_nosotros__form__input fnSelect" data-target="provincias" data-clean="distritos" name="departamento">
						<option value="">Seleccionar</option>
					</select>
					<span class="anuncia_con_nosotros__form__label__title">Departamento</span>
				</label>
				<label class="anuncia_con_nosotros__form__label m--x2 m--select">
					<select id="provincias" class="anuncia_con_nosotros__form__input fnSelect" data-target="distritos" name="provincia">
						<option value="">Seleccionar</option>
					</select>
					<span class="anuncia_con_nosotros__form__label__title">Provincia</span>
				</label>
				<label class="anuncia_con_nosotros__form__label m--x2 m--select">
					<select id="distritos" class="anuncia_con_nosotros__form__input fnSelect" name="distrito">
						<option value="">Seleccionar</option>
					</select>
					<span class="anuncia_con_nosotros__form__label__title">Distrito</span>
				</label>
				<div class="anuncia_con_nosotros__form__actions">
					<p class="anuncia_con_nosotros__form__legal">Al enviar acepto que he leído los <a href="/pdf/terminos-condicones-de-uso-de-datos-piar.pdf" target="_blank">términos y condiciones</a></p>
					<button type="submit" class="button m--black">ENVIAR</button>

				</div>
			</form>



			<div id="thanks_message" class="anuncia_con_nosotros__thanks @if(session('info')) -active- @endif ">
				<strong class="anuncia_con_nosotros__thanks__title">¡Gracias por tu interés!</strong>
				<p class="anuncia_con_nosotros__thanks__text">Pronto nos pondremos en contacto contigo</p>
			</div>
		</div>
	</div>
</section>



@endsection