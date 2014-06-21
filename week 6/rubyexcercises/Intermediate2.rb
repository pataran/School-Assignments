# class Fixnum

# 	def prev
# 		self - 1
# 	end
# 	def skip
# 		self + 2
# end
# end

# puts 4.prev
# puts 4.skip



x="abcdefg"
class String

	def reverse_original
		
		xlength = self.length 
			xlength.times do 
	  			 xlength = (xlength) - 1	
	 			print self[xlength]
			end

	end

end

puts x.reverse_original
