@extends('layouts.app')

@section('content')
<div style="max-width: 1100px; margin: 40px auto; padding: 0 15px; font-family: 'Segoe UI', sans-serif;">

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; flex-wrap: wrap; gap: 10px;">
        <h1 style="color: #2d3748; font-size: 24px; margin: 0;"> Lista de Produtos</h1>
        <a href="{{ route('produtos.create') }}"
           style="background: #4f46e5; color: white; padding: 10px 20px; border-radius: 8px;
                  text-decoration: none; font-weight: bold; font-size: 14px; white-space: nowrap;">
            + Criar Produto
        </a>
    </div>

    <div style="background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; min-width: 600px;">
            <thead>
                <tr style="background: #4f46e5; color: white;">
                    <th style="padding: 15px; text-align: left;">ID</th>
                    <th style="padding: 15px; text-align: left;">Nome</th>
                    <th style="padding: 15px; text-align: left; min-width: 200px;">Descrição</th>
                    <th style="padding: 15px; text-align: left;">Preço</th>
                    <th style="padding: 15px; text-align: left;">Qtd</th>
                    <th style="padding: 15px; text-align: center; min-width: 180px;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                <tr style="border-bottom: 1px solid #e2e8f0;"
                    onmouseover="this.style.background='#f7f7ff'"
                    onmouseout="this.style.background='white'">
                    <td style="padding: 14px 15px; color: #718096;">{{ $produto->id }}</td>
                    <td style="padding: 14px 15px; font-weight: 600; color: #2d3748; white-space: nowrap;">{{ $produto->nome }}</td>
                    <td style="padding: 14px 15px; color: #718096; max-width: 250px; word-wrap: break-word; white-space: pre-wrap;">{{ $produto->descricao }}</td>
                    <td style="padding: 14px 15px; color: #38a169; font-weight: bold; white-space: nowrap;">{{ number_format($produto->preco, 2) }} Kz</td>
                    <td style="padding: 14px 15px; color: #2d3748;">{{ $produto->quantidade }}</td>
                    <td style="padding: 14px 15px; text-align: center; white-space: nowrap;">
                        <a href="{{ route('produtos.show', $produto->id) }}"
                           style="background: #3182ce; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 13px; margin: 2px; display: inline-block;">Ver</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}"
                           style="background: #d69e2e; color: white; padding: 6px 12px; border-radius: 6px; text-decoration: none; font-size: 13px; margin: 2px; display: inline-block;">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    style="background: #e53e3e; color: white; padding: 6px 12px; border-radius: 6px; border: none; font-size: 13px; cursor: pointer; margin: 2px;">Apagar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if($produtos->isEmpty())
        <div style="text-align: center; padding: 60px; color: #a0aec0;">
            <p style="font-size: 18px;">Nenhum produto encontrado.</p>
            <a href="{{ route('produtos.create') }}" style="color: #4f46e5;">Criar o primeiro produto</a>
        </div>
        @endif
    </div>
</div>
@endsection
