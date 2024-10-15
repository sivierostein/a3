<x-layout>
                <!-- Contact -->
                <article id="contact">
                <h2 class="major">Antigos Alunos da EMOP</h2>
                <form method="post" action="process">
                    @csrf
                    <div class="fields">
                        <div class="field half1">
                            <label for="nome">NOME DO AA</label>
                            <input type="text" name="nome" id="nome"/>
                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field half">
                            <label for="ano">ANO DE FORMATURA</label>
                            <input type="text" name="ano" id="ano" />
                            @error('ano')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field half">
                            <label for="curso">CURSO</label>
                            <select name="curso" id="curso">
                                <option value="VER TODOS">VER TODOS</option>
                                @foreach($cursos as $curso)
                                    <option value='$curso->id'>{{$curso->nome}}</option>
                                @endforeach
                            </select>
                            @error('curso')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <ul class="actions">
                        <li><input type="reset" value="APAGAR" /></li>
                        <li><input type="viewall" value="TODOS OS AA" /></li>
                        <li><input type="submit" value="PESQUISAR" class="primary" /></li>
                    </ul>
                </form>

            </article>

</x-layout>