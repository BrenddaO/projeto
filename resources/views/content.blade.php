@extends('layouts.default')



@section('title')
    FORM
@endsection

@section('content')
    <fieldset>
        <form method="POST" action="{{ route('user.create') }}">
            @csrf
            <h3>Cadastro Cliente</h3>
            <label>CPF:</label>
            <Input name="cpf" type="text" placeholder="ex: XXX.XXX.XXX-XX"/>

            <label>Nome:</label>
            <input name="name" type="text"/>

            <label>Data Nascimento:</label>
            <input name="birthdate" type="date"/>

            <label>Sexo</label>
            <input name="sex" value="masculino" type="radio"/> <b>Masculino</b>
            <input name="sex" value="femino" type="radio"/> <b>Feminino </b>
            <br>

            <label>Endereço:</label>
            <input  name="address" type="text"/>

            <label>Estado:</label>
            <select name="states">

                <option selected value="">Todos:</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>

                <label>Cidade</label>
                <select name="cities">
                    <option selected> Todos </option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Guarulhos">Guarulhos</option>
                    <option value="Campinas">Campinas</option>
                    <option value="São José dos Campos">São José dos Campos</option>
                    <option value="Ribeirão Preto">Ribeirão Preto</option>
                    <option value="Santo André">Santo André</option>
                    <option value="São Bernardo do Campo">São Bernardo do Campo</option>
                    <option value="Osasco">Osasco</option>
                    <option value="Santos">Santos</option>
                    <option value="Mogi das Cruzes">Mogi das Cruzes</option>
                    <option value="Diadema">Diadema</option>
                    <option value="Jundiaí">Jundiaí</option>
                    <option value="Carapicuíba">Carapicuíba</option>
                    <option value="Piracicaba">Piracicaba</option>
                    <option value="São Vicente">São Vicente</option>
                </select>
            <br>

            <button name="botao1" type="submit" >Salvar</button>
            <button name="botao2" type="reset">Limpar</button>

        </fieldset>
        </form>
        <br><br/><br><br/>


        <form>
            <fieldset>
            <h3>Consultar cliente</h3>

            <label>CPF:</label>
            <Input name="cpf" type="text" placeholder="ex: XXX.XXX.XXX-XX"/>

            <label>Nome:</label>
            <input name="nome" type="text"/>

            <label>Data Nascimento:</label>
            <input name="data" type="date"/>

            <label>Sexo</label>
            <input name="sexo" value="masculino" type="radio"/> <b>Masculino</b>
            <input name="sexo" value="femino" type="radio"/> <b>Feminino </b>
            <br>

            <label>Endereço:</label>
            <input  name="endereco" type="text"/>

            <label>Estado:</label>
            <select name="estados">

                <option selected value="">Todos:</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>

                <label>Cidade</label>
                <select name="cidades">
                    <option selected> Todos </option>
                    <option value="São Paulo">São Paulo</option>
                    <option value="Guarulhos">Guarulhos</option>
                    <option value="Campinas">Campinas</option>
                    <option value="São José dos Campos">São José dos Campos</option>
                    <option value="Ribeirão Preto">Ribeirão Preto</option>
                    <option value="Santo André">Santo André</option>
                    <option value="São Bernardo do Campo">São Bernardo do Campo</option>
                    <option value="Osasco">Osasco</option>
                    <option value="Santos">Santos</option>
                    <option value="Mogi das Cruzes">Mogi das Cruzes</option>
                    <option value="Diadema">Diadema</option>
                    <option value="Jundiaí">Jundiaí</option>
                    <option value="Carapicuíba">Carapicuíba</option>
                    <option value="Piracicaba">Piracicaba</option>
                    <option value="São Vicente">São Vicente</option>
                </select>
            <br>

            <button name="botao1" type="submit" >Pesquisar</button>
            <button name="botao2" type="reset">Limpar</button>
            <br>

            <fieldset>
                <h3>Resultado de Pesquisa<h3>

            </fieldset>


            </fieldset>
    </form>
@endsection
