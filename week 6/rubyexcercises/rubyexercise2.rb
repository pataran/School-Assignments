


for i in 0..100
	puts "cannot be those numbers" if i < 20
	puts "The number is currently at #{i}"

end


names = ["patrick", "jacob", "robyn", "gonzo", "peppy", "mawmaw", "bella", "john"]

puts "The last name in the list is " + names.last.to_s
puts "The max number of family members is " + names.length.to_s


puts names.shuffle.to_s


y = ('a'..'z')
puts y.to_a.shuffle.to_s


#hash

x = {"first_name" => "Coding", "last_name" => "Dojo"}

# puts x["first_name"], x["lastname"]


puts "Your last name is Dojo" if x["last_name"].eql? "Dojo" 

y = {:first_name => "coding", :last_name => "Dojo"}
puts y[:first_name], y[:last_name]

puts "Deleting :first_name"
y.delete(:first_name)
puts "Y is now", y

if y.has_key? :first_name
	puts "Y has a key called :first_name"
else
	puts "Y does not have a key called :first_name"
end

if y.has_value? "Dojo"
	puts "Y has a value called Dojo"
else
	puts "Y does not have a value called Dojo"
end

# def test
# 	puts "You are in the method"
# 	yield
# 	puts "You are again back to the method"
# 	yield
# end
# test {puts "You are in a block"}


def test
	puts "You are in the method"
	yield(5)
	puts "You are again back to the method"
	yield(100)
end
test {|i| puts "You are in the block #{i}"}

def square(num)
	puts "num is #{num}"
	puts "yield(num) has a value of #{yield(num)}"
end

square(5) { |i| i*i }

def square(num)
	puts "num is #{num}"
	
	x = yield(num)
	puts "x has a value of #{x}"
	y = yield(num) * x
	puts "y has a value of #{y}"
end

square(5) { |i| i*i }
x = ["ant", "bear", "cat"]
puts  x.any? {|word| word.length >= 3}




