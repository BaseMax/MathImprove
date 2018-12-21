fn main()
{
	//This code is not correct!
	let input="(4*2";
	let mut bracket:[i32;500];
	let mut bracket_index=0;
	// let mut bracket_round:i32=0;
	// let mut bracket_curly:i32=0;
	// let mut bracket_square:i32=0;
	for c in input.chars()
	{
		if c == '{'
		{
			bracket_index+=1;
			// bracket_curly+=1;
		}
		else if c == '['
		{
			bracket_index+=1;
			// bracket_square+=1;
		}
		else if c == '('
		{
			bracket_index+=1;
			// bracket_round+=1;
		}
		/////////////////////
		else if c == '}'
		{
			bracket_index-=1;
			// bracket_curly-=1;
		}
		else if c == ']'
		{
			bracket_index-=1;
			// bracket_square-=1;
		}
		else if c == ')'
		{
			bracket_index-=1;
			// bracket_round-=1;
		}
		/////////////////////
		println!("{}",c);
	}
	// if bracket_round != 0
	// {
		
	// }
	// if bracket_curly != 0
	// {
		
	// }
	// if bracket_square != 0
	// {

	// }
}
