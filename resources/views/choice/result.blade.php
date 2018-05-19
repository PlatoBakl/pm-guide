<div class="row justify-content-center">
    <div class="card-body">
        <div>
            <div class="card">
                <div class="card-header">
                    Результаты
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr class="d-flex">
                            <th scope="col" class="col-4 text-center">Методология</th>
                            <th scope="col" class="col-4 text-center">Расстояние Эквклида</th>
                            <th scope="col" class="col-4 text-center">Расстояние Хэмминга</th>
                        </tr>
                        </thead>
                        <tbody class="questionnaire">
                        @foreach (collect($results)->sortBy('euclid') as $name => $result)
                            <tr class="d-flex">
                                <td class="col-4 text-center">
                                    {{ $name }}
                                </td>
                                <td class="col-4 text-center">
                                    {{ $result['euclid'] }}
                                </td>
                                <td class="col-4 text-center">
                                    {{ $result['hamming'] }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center">
                        <a href="{{ url('/') }}" class="btn btn-primary">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>