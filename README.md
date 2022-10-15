## Query

- insert()
- insetGetId()

- where()
- orWhere()
- whereBetween()
- whereNotBetween()
- whereIn()

- whereDate()
- whereMonth()
- whereDay()
- whereYear()
- whereTime()

- whereColumn()

```
$students = DB::table('students')->where('name', 'test')->orWhere(
	function($query){
		$query->where('name', 'test')
			  ->where('id', '<', 5);
	}
)->get();

$students = DB::table('students')->where('name', 'test')->orWhere('name', 'shakib')->whereBetween('id', [2,4])->get();

```
