@extends('templates.master')

    @section('content')

        <main class="d-flex justify-content-between">
            <aside class="col-2 d-flex flex-column">
                <div class="row text-center border-top border-transparent">
                    <a href="Home" target="" class="bg-secondary text-light col-12 py-3">Home</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="{{route('states.index')}}" class="bg-secondary text-light col-12 py-3">States</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="Suporte" target="" class="bg-secondary text-light col-12 py-3">Suporte</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="Produto" target="" class="bg-secondary text-light col-12 py-3">Produto</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="Rato" target="" class="bg-secondary text-light col-12 py-3">Rato</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="Vaca" target="" class="bg-secondary text-light col-12 py-3">Vaca</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="Tigre" target="" class="bg-secondary text-light col-12 py-3">Tigre</a>
                </div>
                <div class="row text-center border-top border-transparent">
                    <a href="Jegue" target="" class="bg-secondary text-light col-12 py-3">Jegue</a>
                </div>
            </aside>
            <div class="col-10 d-flex flex-column">
                <section id="sectionTable">
                    <table class="table table-striped">
                        <thead class="">
                            <tr class="">
                                <th class="">#</th>
                                <th class="">Nome</th>
                                <th class="">E-mail</th>
                                <th class="">Data de Cadastro</th>
                                <th class="">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="">
                                <td class="">1</td>
                                <td class="">Eduardo</td>
                                <td class="">eduardo@gmail.com</td>
                                <td class="">2001-02-05 00:00:00</td>
                                <td class="">
                                    <a href="?alterar=1">Alterar</a> <a href="?deletar=1">Deletar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" target="" class="page-link">Previous</a>
                            </li>
                            <li class="page-item">
                                <a href="#" target="" class="page-link">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#" target="" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" target="" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" target="" class="page-link">Next</a>
                            </li>
                        </ul>
                    </nav>
                </section>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script><script src="./assets/js/script.js"></script></body>

    @endsection

    @section('javaScript')
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/popper.min.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });
    </script>
@endsection
