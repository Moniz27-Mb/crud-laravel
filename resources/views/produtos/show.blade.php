@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: 40px auto; font-family: 'Segoe UI', sans-serif;">

    <div style="background: white; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); padding: 40px;">
        
        <h1 style="color: #2d3748; font-size: 24px; margin-bottom: 30px;">Detalhes do Produto</h1>

        <div style="margin-bottom: 20px; padding: 15px; background: #f7fafc; border-radius: 8px;">
            <p style="color: #718096; font-size: 12px; margin: 0 0 5px 0;">NOME</p>
            <p style="color: #2d3748; font-size: 16px; font-weight: 600; margin: 0;">{{ $produto->nome }}</p>
        </div>

        <div style="margin-bottom: 20px; padding: 15px; background: #f7fafc; border-radius: 8px; word-wrap: break-word;">
            <p style="color: #718096; font-size: 12px; margin: 0 0 5px 0;">DESCRIÇÃO</p>
            <p style="color: #2d3748; font-size: 16px; margin: 0;">{{ $produto->descricao }}</p>
        </div>

        <div style="margin-bottom: 20px; padding: 15px; background: #f7fafc; border-radius: 8px;">
            <p style="color: #718096; font-size: 12px; margin: 0 0 5px 0;">PREÇO</p>
            <p style="color: #38a169; font-size: 20px; font-weight: bold; margin: 0;">{{ number_format($produto->preco, 2) }} Kz</p>
        </div>

        <div style="margin-bottom: 30px; padding: 15px; background: #f7fafc; border-radius: 8px;">
            <p style="color: #718096; font-size: 12px; margin: 0 0 5px 0;">QUANTIDADE</p>
            <p style="color: #2d3748; font-size: 16px; font-weight: 600; margin: 0;">{{ $produto->quantidade }} unidades</p>
        </div>

        <div style="display: flex; justify-content: space-between;">
            <a href="{{ route('produtos.index') }}"
               style="background: #718096; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: bold;">
                 Voltar
            </a>
            <a href="{{ route('produtos.edit', $produto->id) }}"
               style="background: #d69e2e; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: bold;">
                Editar
            </a>
        </div>
    </div>
</div>
@endsection
