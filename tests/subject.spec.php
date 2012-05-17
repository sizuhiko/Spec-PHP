<?php
describe "Subject"
  subject
    return 1;
  end
  it "subject == 1"
    should equal 1
  end

  context "nested context can access to subject"
    it "subject == 1"
      should equal 1
    end
  end

  context "nested subject"
    subject
      return 2;
    end
    it "subject == 2"
      should equal 2
    end
  end

  context "after nested context can access to this block subject"
    it "subject == 1"
      should equal 1
    end
  end

end
