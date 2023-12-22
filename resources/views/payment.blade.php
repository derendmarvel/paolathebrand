@extends('layouts.template')

@section('title', 'Cart')

@section('content')
    <strong>From :</strong>
    <?php echo $from ?>
    {{-- <?php echo $total->rajaongkir->origin_details->province ?> --}}

    <strong>To :</strong>
    <?php echo $to ?>
    {{-- <?php echo $total->rajaongkir->destination_details->province ?> --}}

    <strong>Expedition :</strong>
    <?php echo $total->rajaongkir->results[0]->name ?><br>

    <strong>Weight :</strong>
    <?php echo $total->rajaongkir->query->weight/1000 ?>Kg<br>

    <strong>Cost :</strong>
    @foreach ($total->rajaongkir->results[0]->costs as $biaya): ?><br>
        <?php echo $biaya->service?> : <?php echo number_format($biaya->cost[0]->value) ?> (<?php echo $biaya->cost[0]->etd ?> Day)<br>
    @endforeach
@endsection
