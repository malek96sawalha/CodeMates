


@section('title', 'profile')
<x-app-layout>

<style>
    .min-h-screen{
        min-height: 0 !important;
    }


</style>






<div class="heros overlays" style="background-image: url('images/about.jpg')">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-6 text-center">
				<h1 class="heading text-white mb-2" data-aos="fade-up">Your Profile</h1>
				<p data-aos="fade-up" class=" mb-5 text-white lead text-white-40">Home / Profile</p>


			</div>


		</div>
	</div>
</div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>



        </div>
    </div>


</x-app-layout>
