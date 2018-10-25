<div class="page-header">
    <h1>Products</h1>
</div>
 <?php echo $this->getContent();?>
<table border="2" align="center" width="60%">
		<tr>
		<th>Name</th>
		<th>Categories</th>
		</tr>
		 {% for product in products %}
		<tr>
			<td>
			{{product["name"]}}
			</td>
			<td>
			{{product["categories"]|join(",")}}
			</td>
		</tr>
		{% endfor %}
	</table>