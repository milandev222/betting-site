@extends('layouts.app')
@section('css')
<style type="text/css">
    .list_card{
        padding: 30px 20px 20px 20px;
        background-color: rgb(30,30,30);
        margin-top: 20px;
        border-radius: 5px;
    }
    .list_card h3,p{
        color: white;
    }
    .list_card table th{
        background-color: rgb(40,40,40);
        font-size: 15px;
        color: white;
    }
    .list_card table td{
        color: white;
        font-size: 14px;
    }
    .list_card .filter{
        padding: 10px 0px 20px 0px;
        display: flex;
        justify-content: right;
    }
    .list_card .filter label{
        color: rgb(220,220,220) !important;
        margin: 7px 10px 0px 0px;
    }
    .list_card .filter select{
        background-color: black !important;
        color: white !important;
        width: 200px;
    }
</style>
@endsection

@section('content')
<div class="container game-container">
    <div class="list_card" style="overflow: auto;">
        <h3>Seu histórico de IP de login</h3>
        <p>Lista de endereços IP que você usou para fazer login nesta conta.</p>
        <table class="table table-vcenter">
            <thead>
                <tr>
                    <th style="width: 40%;">Encontro</th> <!-- Date -->
                    <th style="width: 60%;">Endereço de IP</th> <!-- IP address -->
                </tr>
            </thead>
            <tbody>
                @foreach ($ips as $ip)
                <tr>
                    <td>{{date("Y-m-d", strtotime($ip->created_at) - 3600 * 3)}}</td>
                    <td>
                        {{$ip->ip}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">

</script>
@endsection
