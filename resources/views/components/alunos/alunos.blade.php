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
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->UF_Nacionalidade}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->Data_Nascimento}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->Sexo}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->Raca}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->FormaIngresso}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->Curso}}</td>
            <td class="border px-4 py-2 text-emerald-600 font-medium">{{$aluno->Status}}</td>
        </tr>
    </tbody>
    @endforeach

</table>
