<div style="margin:0px 50px 0px 50px;">   

@if($service)
 
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>№ п/п</th>
                <th>Имя</th>
                <th>Текст</th>
                <th>Дата создания</th>
                
                <th>Удалить</th>
            </tr>
        </thead>
        <tbody>
        
        @foreach($service as $k => $serv)
        
        	<tr>
        	
        		<td>{{ $serv->id }}</td>
        		<td>{!! Html::link(route('serviceEdit',['service'=>$serv->id]),$serv->name,['alt'=>$serv->name]) !!}</td>
        		<td>{{ $serv->text }}</td>
        		<td>{{ $serv->created_at }}</td>
        		
        		<td>
	        		{!! Form::open(['url'=>route('serviceEdit',['service'=>$serv->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
	        			
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

{!! Html::link(route('serviceAdd'),'Добавление в сервисы') !!}
   
</div>