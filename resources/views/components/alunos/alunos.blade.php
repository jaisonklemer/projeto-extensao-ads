<table class="table-auto">
    <tr>
        <th class="border">Nome</th>
        <th class="border">Email</th>
        <th class="border">Nacionalidade</th>
        <th class="border">Data Nascimento</th>
        <th class="border">Sexo</th>
        <th class="border">Raça</th>
        <th class="border">Forma de Ingresso</th>
        <th class="border">Curso</th>
        <th class="border">Status</th>
    </tr>
    @foreach($alunos as $aluno)
    <tbody>
        <tr>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->name}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->email}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->uf_nacionalidade}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->data_nascimento}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->sexo}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->raca}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->forma_ingresso}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->curso}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->status}}</td>
        </tr>
    </tbody>
    @endforeach

</table>
