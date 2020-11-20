@extends('layout')

@section('content')
    <!-- main content -->
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<!-- main title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Dashboard</h2>
                        <a href="add-item.html" class="main__title-link">add item</a>
						
							</div>
							<!-- end filter sort -->

							<!-- search -->
							<form action="#" class="main__title-form">
								<input type="text" placeholder="Find movie / tv series..">
								<button type="button">
									<i class="icon ion-ios-search"></i>
								</button>
							</form>
							<!-- end search -->
						</div>
					</div>
				</div>
				<!-- end main title -->

				<!-- users -->
				<div class="col-12">
					<div class="main__table-wrap">
						<table class="main__table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>RATING</th>
									<th>CATEGORY</th>
									<th>VIEWS</th>
									<th>STATUS</th>
									<th>CRAETED DATE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>
										<div class="main__table-text">23</div>
									</td>
									<td>
										<div class="main__table-text">I Dream in Another Language</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--rate"><i class="icon ion-ios-star"></i> 7.9</div>
									</td>
									<td>
										<div class="main__table-text">Movie</div>
									</td>
									<td>
										<div class="main__table-text">1392</div>
									</td>
									<td>
										<div class="main__table-text main__table-text--green">Visible</div>
									</td>
									<td>
										<div class="main__table-text">24 Oct 2019</div>
									</td>
									<td>
										<div class="main__table-btns">
											<a href="#modal-status" class="main__table-btn main__table-btn--banned open-modal">
												<i class="icon ion-ios-lock"></i>
											</a>
											<a href="#" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>
											<a href="#" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
											</a>
											<a href="#modal-delete" class="main__table-btn main__table-btn--delete open-modal">
												<i class="icon ion-ios-trash"></i>
											</a>
										</div>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<!-- end users -->

				<!-- paginator -->
				<div class="col-12">
					<div class="paginator-wrap">
						<span>10 from 14 452</span>

						<ul class="paginator">
							<li class="paginator__item paginator__item--prev">
								<a href="#"><i class="icon ion-ios-arrow-back"></i></a>
							</li>
							<li class="paginator__item"><a href="#">1</a></li>
							<li class="paginator__item paginator__item--active"><a href="#">2</a></li>
							<li class="paginator__item"><a href="#">3</a></li>
							<li class="paginator__item"><a href="#">4</a></li>
							<li class="paginator__item paginator__item--next">
								<a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end paginator -->
			</div>
		</div>
	</main>
@endsection