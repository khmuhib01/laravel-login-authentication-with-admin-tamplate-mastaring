## Query

-   insert()
-   insetGetId()

-   where()
-   orWhere()
-   whereBetween()
-   whereNotBetween()
-   whereIn()

-   whereDate()
-   whereMonth()
-   whereDay()
-   whereYear()
-   whereTime()

-   whereColumn()

-   find()
-   get()
-   value()

-   pluck()

-   select()
-   addselect()

-   insert()
-   update()
-   delete()
-   truncate()
-   updateOrInsert()
-   upsert()

-   orderBy()
-   select()
-   groupBy()
-   offset()
-   limit()

-   union()


-   count()
-   max()
-   min()
-   avg()
-   sum()

-   exists()
-   doesntExist()

-   join()
-   leftjoin()
-   rightjoin()
-   crossjoin()

```
$students = DB::table('students')->where('name', 'test')->orWhere(
	function($query){
		$query->where('name', 'test')
			  ->where('id', '<', 5);
	}
)->get();

$students = DB::table('students')->where(
            function ($query) {
                $query -> where('age', '>', 60);
            }
        )->get();

$students = DB::table('students')->where('name', 'test')->orWhere('name', 'shakib')->whereBetween('id', [2,4])->get();

$students = DB::table('students')->get();

$students = DB::table('students')->where('name', 'test')->orWhere('name', 'shakib')->whereBetween('id', [2,4])->get();

$students = DB::table('students')->whereBetween('id', [2,4])->get();

$students = DB::table('students')->whereNotBetween('id', [2,4])->get();

$students = DB::table('students')->whereIn('id', [2,4])->get();

$students = DB::table('students')->where('id', '2')->value('name');

$students = DB::table('students')->pluck('email');

$students = DB::table('students')->orderBy('name', 'asc')->get();

$student = DB::table('students')->where('id', 2);
$students = DB::table('students')->where('name', 'shifa')->union($student)->get();

$students = DB::table('students')->where('id', '>', 2)->count();

$students = DB::table('students')->max('age');
$students = DB::table('students')->min('age');
$students = DB::table('students')->avg('age');
$students = DB::table('students')->sum('age');

if(DB::table('students')->where('name', 'shifa')->exists()){
            echo 'exit';
        };

if(DB::table('students')->where('name', 'ccc')->doesntExist()){
            echo 'sdadas';
        };

$students = DB::table('students')->join('results')->get();
$students = DB::table('students')->leftJoin('results')->get();
$students = DB::table('students')->rightJoin('results')->get();
$students = DB::table('students')->crossJoin('results')->get();

```
