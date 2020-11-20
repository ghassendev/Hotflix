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
                        <a href="{{ route('films.create') }}" class="main__title-link">add item</a>
						
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
									<th>DESCRIPTION</th>
									<th>STATUS</th>
                                    <th>CRAETED AT</th>
                                    <th>UPDATED AT</th>
									<th>ACTIONS</th>
								</tr>
							</thead>

    

							<tbody>
                                @foreach ($films as $film)
                                    
                               
								<tr>
									<td>
										<div class="main__table-text">{{$film->id}}</div>
									</td>
									<td>
										<div class="main__table-text">{{$film->name}}</div>
									</td>
                                    <td>
										<div class="main__table-text">{{$film->description}}</div>
									</td>
									
									<td>
										<div class="main__table-text main__table-text--green">
                                            @if ($film->status ==1)
                                                Active
                                            @else
                                                Disabled                                                
                                            @endif</div>
									</td>
									<td>
										<div class="main__table-text">{{$film->created_at}}</div>
                                    </td>
                                    <td>
										<div class="main__table-text">{{$film->updated_at}}</div>
									</td>
									<td>
										<div class="main__table-btns">
											
											<a href="" class="main__table-btn main__table-btn--view">
												<i class="icon ion-ios-eye"></i>
											</a>
											<a href="{{ route('films.edit', $film->id) }}" class="main__table-btn main__table-btn--edit">
												<i class="icon ion-ios-create"></i>
                                            </a>
                                            <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <i class="icon ion-ios-trash"></i>
                                                <input type="submit" value="delete" style="border: none; background-color:red;">
                                                    
                                                     
                                                    
                                                </button>
                                            </form>
										</div>
									</td>
								</tr>
                                @endforeach
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