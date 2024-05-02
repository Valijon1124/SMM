<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-md-9"><h1 class="card-title">Сервисы</h1></div>
                        <div class="col-md-3">
                            <a class="btn btn-primary" href="{{route('services.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                                Добавить Сервисы
                            </a>
                        </div>
                    </div>
                    <div class="row table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Сервис</th>
                                <th scope="col">Oписание</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $key => $service)
                                <tr>
                                    <td class="col-1">{{$key+1}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{$service->description}}</td>
                                    <td class="col-2">
                                        <img src="{{asset('img/service/' . $service->img)}}" style="width: 150px; height: 150px;"
                                             alt="">
                                    </td>
                                    <td class="col-2">
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                            <a class="btn btn-warning btn-sm"
                                               href="{{ route('services.edit', $service->id)}}">
                                            <span class="btn-label">
                                                <i class="bi bi-pen"></i>
                                            </span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <span class="btn-label"><i class="bi bi-trash"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
