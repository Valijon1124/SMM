<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-md-9"><h1 class="card-title">Сети</h1></div>
                        <div class="col-md-3">
                            <a class="btn btn-primary" href="{{route('networks.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                                Добавить сети
                            </a>
                        </div>
                    </div>
                    <div class="row table-responsive">
                        <table class="table table-bordered text-center table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Сет</th>
                                <th scope="col">Подписчик</th>
                                <th scope="col">Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($networks as $key => $item)
                                <tr>
                                    <td class="col-1">{{$key+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->count}}</td>
                                    <td class="col-2">
                                        <form action="{{ route('networks.destroy', $item->id) }}" method="POST">
                                            <a class="btn btn-warning btn-sm"
                                               href="{{ route('networks.edit', $item->id)}}">
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
