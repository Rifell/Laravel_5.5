<div style="margin:0px 50px 0px 50px;">   

@if($portfolios)
 
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>Имя</th>
                <th>Фильтр</th>
                <th>Дата создания</th>
                
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($portfolios as $k => $port)
        
        	<tr>
        	
        		<td>{{ $port->id }}</td>
        		<td>{!! Html::link(route('portfolioEdit',['portfolio'=>$port->id]),$port->name,['alt'=>$port->name]) !!}</td>
        		<td>{{ $port->filter }}</td>
        		<td>{{ $port->created_at }}</td>
        		
        		<td>
	        		{!! Form::open(['url'=>route('portfolioEdit',['portfolio'=>$port->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
	        			
	        			<!-- {!! Form::hidden('_method','delete') !!} -->
                       
                        {{method_field('DELETE')}}
	        			{!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
	        			
	        		{!! Form::close() !!}
        		</td>
        	</tr>
        
        @endforeach
        
		
        </tbody>
    </table>
@endif 

{!! Html::link(route('portfolioAdd'),'Добавление в портфолио') !!}
   
</div>