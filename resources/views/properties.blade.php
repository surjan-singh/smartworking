<html>

<h1>Properties</h1>
@foreach ($data as $property)

	<table>
	  <tr>
	    <th>County</th>
	    <th>Country</th>
	    <th>Town</th>
	    <th>Description</th>
	    <th>Display Address</th>
	    <th>Image</th>
	    <th>Thumbnail</th>
	    <th>Latitude</th>
	    <th>Longitude</th>
	    <th>Number of Bedrooms</th>
	    <th>Number of Bathrooms</th>
	    <th>Price</th>
	    <th>Property Type</th>
	    <th>For Sale / For Rent.</th>
	  </tr>
	  <tr>
	    <td>{{ $property->county }}</td>
	    <td>{{ $property->country }}</td>
	    <td>{{ $property->town }}</td>
	    <td>{{ $property->description }}</td>
	    <td>{{ $property->display_address }}</td>
	    <td>{{ $property->image }}</td>
	    <td>{{ $property->thumbnail }}</td>
	    <td>{{ $property->latitude }}</td>
	    <td>{{ $property->longitude }}</td>
	    <td>{{ $property->number_of_bedrooms }}</td>
	    <td>{{ $property->number_of_bathrooms }}</td>
	    <td>{{ $property->price }}</td>
	    <td>{{ $property->property_type }}</td>
	    <td>{{ $property->for_sale }}</td>
	  </tr>
	</table>
@endforeach
<br/><br/><br/><br/>
{{$data}}
</html>