<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="card-title">@if($network->id){{'Обновить сет'}}@else{{'Добавить сет'}}@endif</h1>
                        </div>
                    </div>
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Ой!</strong>С вашим вводом возникли некоторые проблемы.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="@if($network->id) {{ route('networks.update', ['network' => $network->id]) }} @else {{ route('networks.store') }} @endif"
                              method="POST" enctype="multipart/form-data">
                            @csrf
                            @if($network->id)
                                @method('PUT')
                            @endif
                            <div class="form-group mb-3">
                                <label for="name">Сет</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Сет" value="{{$network->name}}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="count">Подписчик</label>
                                <input type="number" name="count" class="form-control" id="count" placeholder="Подписчик" value="{{$network->count}}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Сохранить</button>
                            <input type="reset" class="btn btn-danger" value="Очистить">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
